from twilio.rest import Client

# put your own credentials here
ACCOUNT_SID = 'your_account_sid'
AUTH_TOKEN = 'your_auth_token'

client = Client(ACCOUNT_SID, AUTH_TOKEN)

my_message = client.messages.create(
    to='your_verified_number',
    from_='the_trial_number',
    body='this message was sent using python on pycharm eyy -jafarshodiq',
)

print(my_message.sid)