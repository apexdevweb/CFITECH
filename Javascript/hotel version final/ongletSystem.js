function ongletSystem(evt, tabId) {
  const tabcontent = document.getElementsByClassName("tabcontent");
  Array.from(tabcontent).forEach((el) => (el.style.display = "none"));
  document.getElementById(tabId).style.display = "block";
}
