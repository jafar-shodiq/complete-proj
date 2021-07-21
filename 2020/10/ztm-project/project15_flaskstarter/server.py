from flask import Flask, render_template
app = Flask(__name__)

@app.route('/')
def index():
    return render_template('./index.html')

@app.route('/<username>')
def visitor_name(username=None):
    return render_template('./visitor.html', name=username)

@app.route('/<username>/<int:post_id>')
def visitor_name_with_id(username=None, post_id=None):
    return render_template('./visitor.html', name=username, post_id=post_id)

@app.route('/blog')
def blog():
    return 'this is a blog page'

@app.route('/blog/2020/cats')
def blog_cats():
    return 'this is my cat'

@app.route('/about.html')
def about():
    return render_template('./about.html')
