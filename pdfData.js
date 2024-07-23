async function countPage(file) {
  const pdfBytes = await fetch(file).then((res) => res.arrayBuffer());
  const pdfDoc = await PDFLib.PDFDocument.load(pdfBytes);
  const pageCount = pdfDoc.getPageCount();
  window.getNum = pageCount;
  console.log(`Number of pages: ${pageCount}`);
  send(pageCount);
}

async function send(num) {
  fetch("data.php", {
    method: "POST",
    headers: {
      "Content-Type": "application/x-www-form-urlencoded",
    },
    body: new URLSearchParams({
      number: num,
    }),
  })
    .then((response) => response.text())
    .catch((error) => {
      console.error("Σφάλμα:", error);
    });
}
const file = "data/new.pdf";
countPage(file);
