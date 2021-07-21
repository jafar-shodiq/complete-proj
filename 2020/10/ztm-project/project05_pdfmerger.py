import PyPDF2
import sys

input = sys.argv[1:] #run from console

def pdf_combiner(pdf_list):
    merger = PyPDF2.PdfFileMerger()
    for pdf in pdf_list:
        print(pdf)
        merger.append(pdf)
    merger.write('combined-pdf.pdf')