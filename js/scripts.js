// qc- https://mylandair.com/tools
// tools page pass form number to tracking page
window.onload = function () {
  document.getElementById("protracebutton").onclick = function () {
    var input = document.getElementById("protraceinput").value;
    window.location.href =
      "https://tracking.carrierlogistics.com/scripts/laxv.pol/facts.htm?startpage=protrace&pronum==" +
      input;
  };
};