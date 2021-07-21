import PyPDF2

template = PyPDF2.PdfFileReader(open('your_pdf.pdf', mode='rb')) #read binary
watermark = PyPDF2.PdfFileReader(open('watermark_pdf.pdf', 'rb'))
output = PyPDF2.PdfFileWriter()

for i in range(template.getNumPages()):
    page = template.getPage(i)
    page.mergePage(watermark.getPage(0))
    output.addPage(page)

    with open('watermarked_output.pdf', mode='wb') as file:
        output.write(file)