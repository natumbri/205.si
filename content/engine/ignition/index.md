---
Title: Ignition
Description: Ignition
Template: section
Toc: chapter

---

### 205 Si ignition
The Si/405 SRi wasted spark system is the best that I've seen. Totally reliable and effective. The 306 XSi/ S2 Mi16 individual coil packs on the plugs is the worst by far, very unreliable. Later direct to plug coils seem OK.[^7]


If you fit webber or bike carbs, the si magneti marrelli management does a great job of ignition only. It has a factory map sensor and the ecu still thinks its injecting fuel with all the injection stuff removed and tape to loom.[^10]    


![](%assets_url%/engine/ignition/205si-coil-test-connector.jpg){.quarter}  
Test connector for the coil (probably)[^9]

### Oxygen sensor   
[![](https://drive.google.com/thumbnail?id=1Db6v9khlOmRaV-t7zPq7a5qCIIO76lLF){.quarter}](https://drive.google.com/uc?export=view&id=1Db6v9khlOmRaV-t7zPq7a5qCIIO76lLF)


### Aftermarket engine management
Aftermarket management should make a big difference to this engine, it seems to rely heavily on feedback from the oxy sensor and there is quite a lag after putting your foot down.[^5] Pretty sure you'd need to use the MS2/Extra firmware to support wasted spark and a 60-2 toothed wheel. An extra BIP373 chip added to the standard MS2 kit should see you right for igniter duties.[^6]


### Retarded ignition for 91 RON fuel
Most people complain about the performance of the 205 Si but don't realise that nearly all of them have had their ignition retarded to allow the use of 91 octane fuel.[^1]
You need to set the timing to zero with a TAD100,[^2] a PP2000 or diagbox.[^3]  A [TDA4-99](https://205.si/fuel%20injection/TAD%204-99%20Tester) will also do it. Setting to zero removes a flat spot,[^4] but don't expect mircales.

![](%assets_url%/engine/ignition/205si-diagnostic-connector.jpg){.quarter}  
Diagnostic Connector (TEP/ PP2000): you can plug a TAD100 controller into the connector to adjust the ignition timing and check the fault codes.[^8]


[^1]: https://www.aussiefrogs.com/forum/index.php?threads/205-si-ignition-setting.123592/
[^4]: https://www.aussiefrogs.com/forum/index.php?threads/peugeot-205-si.142993/post-1706104
[^2]: https://www.aussiefrogs.com/forum/index.php?threads/peugeot-205-si.142993/post-1706101
[^3]: https://www.aussiefrogs.com/forum/index.php?threads/peugeot-205-si.142993/post-1706102
[^5]: https://www.aussiefrogs.com/forum/index.php?threads/205-si-megasquirt-thoughts.122742/post-1445657
[^6]: https://www.aussiefrogs.com/forum/index.php?threads/205-si-megasquirt-thoughts.122742/post-1445643
[^7]: https://www.aussiefrogs.com/forum/index.php?threads/aftermarket-ecu-setup-questions-haltech-205gti.141873/post-1717437
[^8]: https://www.aussiefrogs.com/forum/index.php?threads/peugeot-205-si.142993/post-1728938
[^9]: https://www.aussiefrogs.com/forum/index.php?threads/peugeot-205-si.142993/post-1728936
[^10]: https://www.aussiefrogs.com/forum/index.php?threads/205-si-1-6l-auto-rescue.145747/post-1746097
