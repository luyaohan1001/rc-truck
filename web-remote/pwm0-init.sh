if [[ `realpath /sys/class/pwm/pwmchip0/pwm0/` == '' ]];
then
  echo 0 > /sys/class/pwm/pwmchip0/export
  echo 20000000 > /sys/class/pwm/pwmchip0/pwm0/period
  echo 1200000 > /sys/class/pwm/pwmchip0/pwm0/duty_cycle
  echo 1 > /sys/class/pwm/pwmchip0/pwm0/enable
  echo 'init finished'
else
   echo 'init skipped'
fi


