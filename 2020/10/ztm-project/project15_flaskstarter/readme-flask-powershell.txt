when run on windows powershell

1. cd D:\pythonProject\web\webserver\Scripts ---> virtual environment
2. .\Activate.ps1
3. cd D:\pythonProject\web
4. $env:FLASK_APP='server.py'
5. $env:FLASK_ENV='development' ---> to turn on debug mode
6. flask run