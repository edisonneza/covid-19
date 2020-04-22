/**
 * Check if a variable is null or undefined
 * @param {any} val
 */
function IsDefined(val) {
  return typeof val != "undefined" || val != null;
}

/**
 * Change the display property (if jQuery isn't included)
 * @param {string} className
 * @param {string} display
 */
function DisplayHideCirclesByClassName(className, display) {
  var allCircles = document.querySelectorAll("." + className);
  for (i = 0; i < allCircles.length; i++) {
    allCircles[i].style.display = display;
  }
}

/**
 * Format to datetime DD/MM/YYYY HH:mm
 * @param {string} date
 */
function FormatDateTime(date) {
  var d = new Date(date),
    month = "" + (d.getMonth() + 1),
    day = "" + d.getDate(),
    year = d.getFullYear();
  hour = d.getHours();
  min = d.getMinutes();

  if (month.length < 2) month = "0" + month;
  if (day.length < 2) day = "0" + day;
  if (hour.length < 2) hour = "0" + hour;
  if (min.length < 2) min = "0" + min;

  return day + "/" + month + "/" + year + " " + hour + ":" + min;
}

/**
 * Format to date DD/MM/YYYY
 * @param {string} date
 */
function FormatDate(date) {
  var d = new Date(date),
    month = "" + (d.getMonth() + 1),
    day = "" + d.getDate(),
    year = d.getFullYear();

  if (month.length < 2) month = "0" + month;
  if (day.length < 2) day = "0" + day;

  return [day, month, year].join("/");
}

/**
 * Get the circle size based in cases
 * @param {object} city
 */
function GetCicleSize(city) {
  var raste = city.cases || city.raste_gjithesej;
  return raste < 100 ? raste * 140 : raste > 1000 ? raste * 40 : raste * 60;
}

/**
 * Generate the HTML template to use in .bindPopup()
 * @param {string} city
 */
function HtmlTemplate(city) {
  var html = "<b>" + city.name + "</b>";
  html += IsDefined(city.lastUpdate)
    ? ": <i>" + FormatDate(city.lastUpdate) + "</i>"
    : "";
  html += "<hr/><table>";

  if (IsDefined(city.cases)) {
    html +=
      "<tr class='text-orange'><td> " +
      city.cases +
      " </td><td> raste totale <i class='text-red'>(" +
      (city.cases - city.casesYesterday) +
      ")	</i></td></tr>";
    html +=
      "<tr><td>" + city.casesYesterday + "</td><td> raste totale dje</td></tr>";
  }

  html += IsDefined(city.teste_gjithesej)
    ? "<tr class='text-lightblue'><td>" +
      city.teste_gjithesej +
      "</td><td> teste <i class='text-red'>(" +
      (city.teste_gjithesej - city.teste_gjithesej_dje) +
      " nga dje)	</i></td></tr>"
    : "";

  if (IsDefined(city.raste_gjithesej)) {
    html +=
      "<tr class='text-orange'><td>" +
      city.raste_gjithesej +
      "</td><td> raste totale <i class='text-red'>(" +
      (city.raste_gjithesej - city.raste_gjithesej_dje) +
      " nga dje)<i></td></tr>";

    var active = city.raste_gjithesej - city.te_sheruar - city.te_vdekur;
    var activeYesterday =
      city.raste_gjithesej_dje - city.te_sheruar_dje - city.te_vdekur_dje;
    html +=
      "<tr class='text-red'><td>" +
      active +
      "</td><td> raste aktive <i class='text-red'>(" +
      (active - activeYesterday) +
      " nga dje)	</i></td></tr>";
  }

  html += IsDefined(city.te_sheruar)
    ? "<tr class='text-green'><td>" +
      city.te_sheruar +
      "</td><td> te sheruar <i class='text-red'>(" +
      (city.te_sheruar - city.te_sheruar_dje) +
      " nga dje)	</i></td></tr>"
    : "";

  html += IsDefined(city.te_vdekur)
    ? "<tr><td>" +
      city.te_vdekur +
      "</td><td> fatale <i class='text-red'>(" +
      (city.te_vdekur - city.te_vdekur_dje) +
      " nga dje)	</i></td></tr>"
    : "";

  html += "</table>";

  return html;
}

/**
 * Card values inside Materialize Modal
 * @param {object} city
 */
function GenerateAlbCards(city) {
  $("#totalCard").append(
    "<p>Sot: " +
      city.raste_gjithesej +
      " <i class='text-orange'>(" +
      (city.raste_gjithesej - city.raste_gjithesej_dje) +
      ")</i></p>"
  );
  $("#totalCard").append("<p>Dje: " + city.raste_gjithesej_dje + "</p>");

  var active = city.raste_gjithesej - city.te_sheruar - city.te_vdekur;
  var activeYesterday =
    city.raste_gjithesej_dje - city.te_sheruar_dje - city.te_vdekur_dje;

  $("#activeCard").append(
    "<p>Sot: " +
      active +
      " <i class='text-orange'>(" +
      (active - activeYesterday) +
      ")</i></p>"
  );
  $("#activeCard").append("<p>Dje: " + activeYesterday + "</p>");

  $("#recoveredCard").append(
    "<p>Sot: " +
      city.te_sheruar +
      " <i class='text-orange'>(" +
      (city.te_sheruar - city.te_sheruar_dje) +
      ")</i></p>"
  );
  $("#recoveredCard").append("<p>Dje: " + city.te_sheruar_dje + "</p>");

  $("#fatalCard").append("<p>" + city.te_vdekur + "</p>");
  var incrementedFatalCases =
    city.te_vdekur - city.te_vdekur_dje > 0
      ? "+" + city.te_vdekur - city.te_vdekur_dje
      : "0";
  $("#fatalCard").append(
    "<p>Nga dje:  <i class='text-orange'>(" +
      incrementedFatalCases +
      ")</i></p>"
  );

  $("#testedCard").append(
    "<p>Sot: " +
      city.teste_gjithesej +
      " <i class='text-orange'>(" +
      (city.teste_gjithesej - city.teste_gjithesej_dje) +
      ")</i></p>"
  );
  $("#testedCard").append("<p>Dje: " + city.teste_gjithesej_dje + "</p>");
}

/**
 * Card values inside Materialize Modal
 * @param {object} city
 */
function GenerateKsCards(city) {
  $("#totalCardKs").append(
    "<p>Sot: " +
      city.raste_gjithesej +
      " <i class='text-orange'>(" +
      (city.raste_gjithesej - city.raste_gjithesej_dje) +
      ")</i></p>"
  );
  $("#totalCardKs").append("<p>Dje: " + city.raste_gjithesej_dje + "</p>");

  var active = city.raste_gjithesej - city.te_sheruar - city.te_vdekur;
  var activeYesterday =
    city.raste_gjithesej_dje - city.te_sheruar_dje - city.te_vdekur_dje;

  $("#activeCardKs").append(
    "<p>Sot: " +
      active +
      " <i class='text-orange'>(" +
      (active - activeYesterday) +
      ")</i></p>"
  );
  $("#activeCardKs").append("<p>Dje: " + activeYesterday + "</p>");

  $("#recoveredCardKs").append(
    "<p>Sot: " +
      city.te_sheruar +
      " <i class='text-orange'>(" +
      (city.te_sheruar - city.te_sheruar_dje) +
      ")</i></p>"
  );
  $("#recoveredCardKs").append("<p>Dje: " + city.te_sheruar_dje + "</p>");

  $("#fatalCardKs").append("<p>" + city.te_vdekur + "</p>");
  var incrementedFatalCases =
    city.te_vdekur - city.te_vdekur_dje > 0
      ? "+" + city.te_vdekur - city.te_vdekur_dje
      : "0";
  $("#fatalCardKs").append(
    "<p>Nga dje:  <i class='text-orange'>(+" +
      incrementedFatalCases +
      ")</i></p>"
  );

  if (IsDefined(city.teste_gjithesej)) {
    $("#testedCardKs").append(
      "<p>Sot: " +
        city.teste_gjithesej +
        " <i class='text-orange'>(" +
        (city.teste_gjithesej - city.teste_gjithesej_dje) +
        ")</i></p>"
    );
    $("#testedCardKs").append("<p>Dje: " + city.teste_gjithesej_dje + "</p>");
  } else {
    $("#testedCardKs").hide();
  }
}

/**
 * Generate Chart for a specific month
 * @param {string[]} dates
 * @param {number[]} tests
 * @param {number[]} infections
 * @param {string} month
 */
function ShowTestsGraphic(dates, tests, infections, month) {
  var config = {
    type: "line",
    data: {
      labels: dates,
      datasets: [
        {
          label: "Testime",
          backgroundColor: "#5bc0de",
          borderColor: "#5bc0de",
          data: tests,
          fill: false,
        },
        {
          label: "Te infektuar",
          fill: false,
          backgroundColor: "#ed5153",
          borderColor: "#ed5153",
          data: infections,
        },
      ],
    },
    options: {
      responsive: true,
      title: {
        display: true,
        text:
          "Testimet dhe infektimet per muajin " +
          month.charAt(0).toUpperCase() +
          month.slice(1),
      },
      tooltips: {
        mode: "index",
        intersect: false,
      },
      hover: {
        mode: "nearest",
        intersect: true,
      },
      scales: {
        xAxes: [
          {
            display: true,
            scaleLabel: {
              display: true,
              labelString: "Data",
            },
          },
        ],
        yAxes: [
          {
            display: true,
            scaleLabel: {
              display: true,
              labelString: "Numri",
            },
          },
        ],
      },
    },
  };
  var ctx = document.getElementById(month + "Chart").getContext("2d");
  window.myLine = new Chart(ctx, config);
}

/**
 * API - get json object
 */
function GenerateGraphics() {
  var dates = {
    shkurt: [],
    mars: [],
  };
  var tests = {
    shkurt: [],
    mars: [],
  };
  var infections = {
    shkurt: [],
    mars: [],
  };
  if ("fetch" in window) {
    fetch("api/v2?token=04ccf460dd35d6d16e08264f9f637fb2")
      .then((response) => {
        return response.json();
      })
      .then((data) => {
        // console.log(data);
        data.forEach((val) => {
          switch (Number(val.date.split("-")[1])) {
            case 2:
              dates.shkurt.push(FormatDate(val.date));
              tests.shkurt.push(val.tests);
              infections.shkurt.push(
                val.infections.reduce(
                  (accumulator, currentValue) =>
                    accumulator + currentValue.number,
                  0
                )
              );
              break;
            case 3:
              dates.mars.push(FormatDate(val.date));
              tests.mars.push(val.tests);
              infections.mars.push(
                val.infections.reduce(
                  (accumulator, currentValue) =>
                    accumulator + currentValue.number,
                  0
                )
              );
              break;
          }
        });

        ShowTestsGraphic(
          dates.shkurt,
          tests.shkurt,
          infections.shkurt,
          "shkurt"
        );

        ShowTestsGraphic(dates.mars, tests.mars, infections.mars, "mars");

      });
  } else alert("Nevojitet nje browser i ri per te aksesuar kete faqe!");
}

/**
 * Init Materialize components
 */
function InitMaterialize() {
  var elems = document.querySelectorAll(".fixed-action-btn");
  M.FloatingActionButton.init(elems, { hoverEnabled: false });

  var elems = document.querySelectorAll(".modal");
  M.Modal.init(elems);
}
