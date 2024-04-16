---
Title: Top speed
Description: Calculate 205 Si top speed
Template: chapter
Toc: chapter

---

## Maximum possible speed    


Symbol | Input | Unit | Value
--|--|--|--
c | drag coefficient |  | 0.34
D | density of air  | $(kg/m^3)$ | 1.25
w | width of 205 Si | $(m)$ | 1.570
h | height of  205 Si | $(m)$ | 1.375
A | projected area $(w \cdot h)$ | $(m^2)$ | 2.159
P | power | $(W)$ | 65,000
v | velocity relative to air | $(m/s)$ |    |

<table>
<tr><td width="50%">
$$\begin{eqnarray} 
F_{drag} &=& \frac{1}{2}  \cdot c  \cdot D  \cdot A  \cdot v^2      \\
\\
P &=& F  \cdot v \\
&=&\frac{1}{2}  \cdot c  \cdot D  \cdot A  \cdot v^3  \\
\\
v &=& \left(\frac{2  \cdot P }{c  \cdot D  \cdot A}\right)^{\frac{1}{3}} \\
&=& \left(\frac{2  \cdot 65000 }{ 0.34  \cdot 1.25  \cdot 2.159}\right)^{\frac{1}{3}} \\
&=& 52.13\,m/s \\
&=& 187.67\,km/h \\
\end{eqnarray}$$
</td>
<td width="50%">
<ul>
<li> does not account for drag from rolling resistace; at maximum speed, air resistance dominates
<li> does not account for drivetrain losses (power at the wheels)
<li> something closer to 175 km/h is probably a more realistic estimate of maximum speed (assuming the above factors are equivalent to a 20% drop in power)
</ul>
</td>
</tr>
</table>
