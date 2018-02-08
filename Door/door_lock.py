#!/usr/bin/python

from time import sleep
import paho.mqtt.client as mqtt
import RPi.GPIO as GPIO

#mqtt stuff
client = mqtt.Client()
client.connect("localhost",1883,300)

#Topic=automation/door 1-Lock Door
client.publish("automation/door", "1")

