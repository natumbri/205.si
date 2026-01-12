---
Title: EFI fault codes
Description: Fault codes for Magneti Marelli FD Monopoint G5 and G6 injection
Template: chapter
Toc: chapter

---

#Fault codes

Fault codes for Magneti Marelli FD Monopoint G5 and G6 injection <br>
205 SI, XU5 1.6 litre engine[^1] <br>

Code|	Description
--- | ---
11 | End test
12 | Start test
13  |	Inlet air thermistor
14	|	Coolant thermistor
21	|	Throttle potentiometer
22	|	Idling regulation stepper motor control
31	|	Mixture regulation auto-adaptation
33	|	Inlet manifold pressure sensor
41	|	Engine speed sensor
42	|	Injectors control
45	|	Coil 1 control function
52	|	Mixture regulation
53	|	Battery voltage
54	|	Ignition injection Control Unit
57	|	Coil 2 control

# Reading fault codes

There is a green 2 pin connector on the in the engine bay, drivers side near the bulkhead.

Run a wire from one pin of this connector into the cabin.

With the ignition on (engine not running) hold the other end or the wire against the key/ignition barrel for between 3-5 seconds to ground it out.

The engine warning light should go out, then pulse once with a 1.5 second gap then pulse twice with a 1 second gap. 1 pulse + 2 pulses equals 12 - start test

Ground the cable again, and the engine light will show another sequence

Continue this process until the count is 11 - end test [^2]

[^1]: http://www.peugeotlogic.com/workshop/wshtml/diagnost/testcone/testcone.htm
[^2]:https://www.aussiefrogs.com/forum/index.php?threads/205-si-fault-code-reset.145342/post-1740432

