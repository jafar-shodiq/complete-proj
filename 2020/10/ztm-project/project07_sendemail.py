import smtplib
from email.message import EmailMessage
from string import Template
from pathlib import Path

html = Template(Path('./project7_sendemail.html').read_text())
email = EmailMessage()
email['from'] = 'your name'
email['to'] = 'theiremail@email.com'
email['subject'] = 'this is a subject to the email'

email.set_content(html.substitute({'name':'my name','age': 'my age'}), 'html')

with smtplib.SMTP(host='smtp.gmail.com', port=587) as smtp:
    smtp.ehlo()
    smtp.starttls()
    smtp.login('your_email@email.com', 'your_password')
    smtp.send_message(email)
    print('email sent!')