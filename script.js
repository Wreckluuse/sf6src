let currentMoveSectionsP1 = [];
let currentMoveSectionsP2 = [];
let p1Move = {};
let p2Move = {};

const cleanInput = (input) => {
  if (input.includes("_")) {
    return input.split("_")[0] + " " + input.split("_")[1];
  } else if (input.includes(".")) {
    return input.split(".")[0] + ". " + input.split(".")[1];
  } else {
    return input;
  }
};

const restructureFramedata = (framedata) => {
  let newFramedata = {};
  framedata.forEach((value) => {
    let key = Object.keys(value)[0];
    newFramedata[key] = value[key].toLowerCase();
  });
  return newFramedata;
};

const displayNewFrames = (data) => {
    
}

const calculateInteraction = (move1, move2, hitState_1, hitState_2) => {
  const stateMap = {
    "neutral": 0,
    "counterhit": 2,
    "punishcounter": 4,
    "block": 0,
  };

  if (move1.frame_data && move2.frame_data) {
    move1.frame_data = restructureFramedata(move1.frame_data);
    move2.frame_data = restructureFramedata(move2.frame_data);

    let calculateHit = (Number(move1.frame_data.startup) - Number(move2.frame_data.startup) >= 1);
    if (calculateHit) {
      displayNewFrames({
        landedHit: "p1",
        recovery: Number(move1.frame_data.recovery) + stateMap[hitState_1]
      });
    } else displayNewFrames({
      landedHit: "p2",
      recovery: Number(move2.frame_data.recovery) + stateMap[hitState_2]
    });
  }
};

const updateMoveList = (character, element) => {
  $.post({
    url: "http://localhost/sf6src/data.php",
    data: {
      getMovelist: character,
    },
    success: function (output) {
      const moves = JSON.parse(output[character]);
      if ($(element).attr("id") == "character-1") {
        currentMoveSectionsP1 = moves;
        $(element).next().html("");
        currentMoveSectionsP1.forEach((section) => {
          section.data.forEach((move) => {
            $("<option/>")
              .val(move["name"])
              .text(cleanInput(move["name"]))
              .appendTo($(element).next());
          });
        });
      } else if ($(element).attr("id") == "character-2") {
        currentMoveSectionsP2 = moves;
        $(element).next().html("");
        currentMoveSectionsP2.forEach((section) => {
          section.data.forEach((move) => {
            $("<option/>")
              .val(move["name"])
              .text(cleanInput(move["name"]))
              .appendTo($(element).next());
          });
        });
      }
    },
  });
};

const updateCurrentMove = (currentMove, element, hitState_1, hitState_2) => {
  nextMove = {};
  if ($(element).attr("id") == "move-select-1") {
    currentMoveSectionsP1.forEach((section) => {
      section.data.forEach((move) => {
        if (move.name == currentMove) {
          nextMove = move;
          $("#move-header-1").text(`${nextMove.name} (${nextMove.input})`);
          $("#move-image-1").attr(
            "src",
            `https://wiki.supercombo.gg${nextMove.img_url}`
          );
          p1Move = move;
        }
      });
    });
    console.log(p1Move);
    if (p2Move != null) {
      calculateInteraction(p1Move, p2Move, hitState_1, hitState_2);
    }
  } else if ($(element).attr("id") == "move-select-2") {
    currentMoveSectionsP2.forEach((section) => {
      section.data.forEach((move) => {
        if (move.name == currentMove) {
          nextMove = move;
          $("#move-header-2").text(`${nextMove.name} (${nextMove.input})`);
          $("#move-image-2").attr(
            "src",
            `https://wiki.supercombo.gg${nextMove.img_url}`
          );
          p2Move = move;
        }
      });
    });
    console.log(p2Move);
    if (p1Move != null) {
      calculateInteraction(p1Move, p2Move, hitState_1, hitState_2);
    }
  }
};

$(function () {
  const settingsButtons = $(".settings-button");
  const buttonWrapper = $(".button-rotator");
  const characters = $(".character-select");
  const p1character = $("#character-1");
  const p2character = $("#character-2");
  const moveLists = $(".move-select");
  const p1Moves = $("#move-select-1");
  const p2Moves = $("#move-select-2");
  let hitType_1 = "normal";
  let hitType_2 = "normal";

  $("input[name='hit-type-1']").change(function (e) {
    hitType_1 = $(e.target).val();
    $("input[name='hit-type-1']:not(:checked)")
      .parent()
      .css("background-color", "");
    $("input[name='hit-type-1']:checked")
      .parent()
      .css("background-color", "#686868");
  });

  $("input[name = 'hit-type-2']").change(function (e) {
    hitType_2 = $(e.target).val();
    $("input['name='hit-type-2']:not(:checked)")
      .parent()
      .css("background-color", "");
    $("input['name='hit-type-2']:checked")
      .parent()
      .css("background-color", "#686868");
  });

  characters.on("change", (e) => {
    $(e);
    let char = $(e.target).val();
    updateMoveList(char, $(e.target));
  });

  moveLists.on("change", (e) => {
    let currentMove = $(e.target).val();
    updateCurrentMove(currentMove, $(e.target), hitType_1, hitType_2);
  });

  settingsButtons.on("click", (e) => {
    $(e.target).next().toggleClass("settings-open");
    $(e.target).children().toggleClass("rotate");
  });
});
