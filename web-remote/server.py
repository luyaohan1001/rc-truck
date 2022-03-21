from flask import *
import threading
import os

app = Flask(__name__)

val = 0
# render the html page.
@app.route('/')
def index():
    return render_template('panel.html')

# button press listener
@app.route('/button_press_handler', methods=['POST']) 
def button_press_handler():
  if request.method == 'POST':
    if request.form['buttons'] == 'forward-button':
      # flash('FORWARD')
      flash(str(val))
    elif request.form['buttons'] == 'left-button':
      flash('LEFT')
    elif request.form['buttons'] == 'right-button':
      flash('RIGHT')
    elif request.form['buttons'] == 'backward-button':
      flash('BACKWARD')
    elif request.form['buttons'] == 'laser-on-button':
      flash('LASER ON')
      os.system('echo 1 > /dev/etx_device')  
    elif request.form['buttons'] == 'laser-off-button':
      flash('LASER OFF')
      os.system('echo 0 > /dev/etx_device')  


  return render_template('panel.html')

	

if __name__ == '__main__':
    app.secret_key = 'babydriver'
    app.run(debug=True, host='0.0.0.0', port=5000)
