import tweepy

auth = tweepy.OAuthHandler('your_consumer_key', 'your_consumer_secret_key')
auth.set_access_token('your_access_token', 'your_access_token_secret')
api = tweepy.API(auth)

user = api.me()
print(user.name)
print(user.screen_name)

# -----liking bot-----
search_str = 'python'
numberOfTweets = 2
for tweet in tweepy.Cursor(api.search, search_str).items(numberOfTweets):
    try:
        tweet.favorite()
        print('i liked that tweet')
    except tweepy.TweepError as err:
        print(err.reason)
    except StopIteration:
        break

# -----follow bot-----
import time
def limit_handler(cursor):
    try:
        while True:
            yield cursor.next()
    except tweepy.RateLimitError:
        time.sleep(1000)

for follower in limit_handler(tweepy.Cursor(api.followers).items()):
    if follower.name == 'their_name(s)':
        follower.follow()
        break