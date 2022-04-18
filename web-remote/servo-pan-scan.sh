while [ 1 ]
do
  for i in {600000..2700000..200}
  do
    echo $i > /sys/class/pwm/pwmchip0/pwm0/duty_cycle
  done


  for i in {2700000..600000..-200}
  do
    echo $i > /sys/class/pwm/pwmchip0/pwm0/duty_cycle
  done
done
