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
      flash('FORWARD', category='flask-flash-text')


    elif request.form['buttons'] == 'left-button':
      flash('LEFT', category='flask-flash-text')
    elif request.form['buttons'] == 'right-button':
      flash('RIGHT', category='flask-flash-text')
    elif request.form['buttons'] == 'backward-button':
      flash('BACKWARD', category='flask-flash-text')
    elif request.form['buttons'] == 'laser-on-button':
      flash('LASER ON', category='flask-flash-text')
    elif request.form['buttons'] == 'laser-off-button':
      flash('LASER OFF', category='flask-flash-text')
    elif request.form['buttons'] == 'servo-pan-N90':
      flash('SERVO PAN -90', category='flask-flash-text')
      pwm_sysfs_realpath_export = os.popen('realpath /sys/class/pwm/pwmchip0/pwm0/enable').read()
      pwm_sysfs_realpath_export = pwm_sysfs_realpath_export.replace('\n','')
      print(pwm_sysfs_realpath_export)
      #os.system('echo 20000000 > ' + pwm_sysfs_realpath + '/pwm0/period')
      #os.system('echo 2000000 > ' + pwm_sysfs_realpath + '/pwm0/duty_cycle')
      os.system('echo 1 > ' + pwm_sysfs_realpath_export)

    elif request.form['buttons'] == 'servo-pan-P90':
      flash('SERVO PAN +90', category='flask-flash-text')



  return render_template('panel.html')

	

if __name__ == '__main__':
    app.secret_key = 'babydriver'
    app.run(debug=True, host='0.0.0.0', port=5000)
