from flask import Flask, render_template
app = Flask(__name__)

@app.route('/')
def index():
    return render_template('index.html', name="Hans was here")

@app.route('/success')
def success():
    return render_template('success.html')

@app.route('/ninjas')
def ninjas():
    return render_template('ninjas.html')

@app.route('/dojos/new')
def new():
    return render_template('new.html')

app.run(debug=True)
