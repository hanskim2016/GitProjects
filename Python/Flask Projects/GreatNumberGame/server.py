import random
from flask import Flask, render_template, request, redirect, session

app = Flask(__name__)
app.secret_key = "i am a secret key!"

@app.route('/')
def index():
    return render_template("GreatNumberGameIndex.html")

@app.route('/toolow')
def toolow():
    return render_template("toolow.html")

@app.route('/toohigh')
def toohigh():
    return render_template("toohigh.html")

@app.route('/success')
def success():
    return render_template("success.html")

@app.route('/inputerror')
def inputerror():
    return render_template("inputerror.html")

@app.route('/process', methods=['POST'])
def process():
    try:
        session['userNumber'] = int(float(request.form['userNumber']))
    except ValueError:
        return redirect('/inputerror')

    if 'number' not in session:
        session['number'] = random.randrange(0,101)

    if session['userNumber'] < session['number']:
        return redirect('/toolow')
    elif session['userNumber'] > session['number']:
        return redirect('/toohigh')
    elif session['userNumber'] == session['number']:
        return redirect('/success')
    else:
        return redirect('/inputerror')


@app.route('/clear', methods=['POST'])
def clear():
    session['number'] = random.randrange(0,101)
    return redirect('/')

app.run(debug=True)
