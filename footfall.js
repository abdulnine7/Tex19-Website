$(document).ready(function() {

  var counters = $(".count");

  var countersQuantity = counters.length;

  var counter = [];

  for (i = 0; i < countersQuantity; i++) {
    counter[i] = parseInt(counters[i].innerHTML);

  }

  var count = function(start, value, id) {
    var localStart = start;

    setInterval(function() {
      if (localStart < value) {
        if (value < 100) {
          localStart = localStart + 1;
          counters[id].innerHTML = localStart;
        } else if (100 < value && value < 10000) {
          localStart = localStart + 50;
          counters[id].innerHTML = localStart;

        } else {
          localStart = localStart + 5000;
          counters[id].innerHTML = localStart;
        }

      }
    }, 40);
  }

  for (j = 0; j < countersQuantity; j++) {
    count(0, counter[j], j);
  }
});
