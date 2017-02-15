import random, time
from flask import Flask, render_template, request, redirect, session, flash

app = Flask(__name__)
app.secret_key = "secretkeyhere"

@app.route('/')
def index():
    try:
        session['gold']
    except KeyError:
        session['gold'] = 0

    try:
        session['how_many_turns']
    except KeyError:
        session['how_many_turns'] = 0

    try:
        session['earn']
    except KeyError:
        session['earn'] = 0

    try:
        session['activities']
    except:
        session['activities'] = []

    return render_template("index.html")

@app.route('/process', methods=['POST'])
def process():
    earn()
    session['gold_source'] = request.form['place']
    session['gold'] += session['earn']
    session['timestamp'] = time.asctime( time.localtime(time.time()) )
    session['how_many_turns'] += 1

    if session['earn'] > 0:
        msg = ("You earned {} pieces of gold through the {}. Timestamp: {}".format(str(session['earn']), str(request.form['place']), str(session['timestamp'])))
    else:
        msg = ("Ouch. You lost {} pieces of gold through the {}. Timestamp: {}".format(str(session['earn']), str(request.form['place']), str(session['timestamp'])))

    activity_messaging(session['how_many_turns'], msg)


    return redirect ("/")

@app.route('/reset', methods=['POST'])
def reset():
    session['gold'] = 0
    session['earn'] = 0
    session['timestamp'] = ""
    session['activities'] = []
    session['how_many_turns'] = 0

    return redirect ("/")

def earn():

    if request.form['place'] == 'farm':
        session['earn'] = random.randrange(10,21, 1)
    elif request.form['place'] == 'cave':
        session['earn'] = random.randrange(5,11, 1)
    elif request.form['place'] =='house':
        session['earn'] = random.randrange(2,4,1)
    elif request.form['place'] == 'casino':
        session['earn'] = random.randrange(-50,51,1)
    else:
        session['earn'] = 0

def activity_messaging(index, message):
    session['activities'].insert(index, message)



app.run(debug=True)
