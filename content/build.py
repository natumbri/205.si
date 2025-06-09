import os
# Define the folder structure
folders = ["projects", "blog"]
# Define the file contents
files = { "projects/index.md": """# Peugeot 205 Si 
    Project Overview
I’m restoring and modifying three Peugeot 205 Si 
models, each with a different focus. This page 
introduces the three projects, with links to 
detailed build plans and updates. ---
## 🔴 Red 205 Si — Reliable Auto Runabout
- Swapping in an XU7 engine and ZF 4HP14 automatic 
gearbox from a Peugeot 306 - Keeping the monopoint 
EFI system for simplicity - Upgraded brakes and 14" 
wheels 👉 [View Full Red 205 
Plan](./red-205-plan.md) ---
## ⚪ White 205 Si — Entry-Level Motorsport Build
- Lightweight, agile build for club-level 
competition - Focus on handling, safety, and 
simplicity 🚧 *Page under construction* 👉 [View 
White 205 Plan](./white-205-plan.md) ---
## 🔵 Blue 205 Si — High-Performance Conversion
- Stripped shell build with XU10J4 16V engine - Full 
drivetrain, suspension, and interior rebuild 🚧 
*Page under construction* 👉 [View Blue 205 
Plan](./blue-205-plan.md) """,
    "projects/red-205-plan.md": """# Red 205 Si 
    Restoration Plan
## Project Goals
- Swap the complete XU7 engine and ZF 4HP14 
automatic gearbox from a donor Peugeot 306 - Retain 
the original Magneti Marelli monopoint G5/G6 EFI 
system for smooth, reliable running - Upgrade front 
brakes using Peugeot 306 ventilated discs, calipers, 
and 14" wheels for improved safety and performance - 
Maintain the car as a comfortable and dependable 
automatic runabout ---
## Two-Stage Work Schedule & Checklist with Time 
## Estimates
### Stage One: Donor 306 Strip & Prep
- [ ] Prepare clean workspace for donor vehicle 
strip — **1.0 hr** - [ ] Drain all fluids (engine 
oil, coolant, transmission fluid) — **0.5 hr** - [ ] 
Disconnect wiring, hoses, and label carefully — 
**2.0 hrs** - [ ] Remove wheels, brakes, and 
suspension components, retaining needed parts — 
**2.0 hrs** - [ ] Remove complete XU7 engine and ZF 
4HP14 transmission assembly — **3.0 hrs** - [ ] 
Separate engine and gearbox if needed for 
refurbishment — **1.0 hr** - [ ] Transfer 205 
monopoint intake manifold and sensors onto XU7 
engine — **1.5 hrs** - [ ] Inspect and refurbish 
engine components (timing belt, water pump, seals) — 
**6.0 hrs** - [ ] Inspect and refurbish transmission 
(fluid change, filter, seals) — **3.0 hrs** - [ ] 
Inspect, clean, and refurbish 306 brake calipers and 
ventilated discs — **3.0 hrs** - [ ] Inspect hubs, 
bearings, and replace brake hoses/adapters as 
necessary — **2.0 hrs** - [ ] Organize, label, and 
store all parts carefully — **1.0 hr** - [ ] Dispose 
or recycle non-useful donor parts — **0.5 hr** - [ ] 
Order any missing components and tools — **0.5 hr** 
**Stage One Total Estimate: ~26.5 hours** ---
### Stage Two: 205 Prep & Swap
- [ ] Prepare workspace for 205 teardown — **1.0 
hr** - [ ] Drain fluids from 205 (engine oil, 
coolant, brake fluid) — **0.5 hr** - [ ] Remove 
original engine and transmission from 205 — **3.0 
hrs** - [ ] Inspect 205 front hubs and uprights 
(bearings, seals) — **1.5 hrs** - [ ] Install 
prepped donor XU7 engine and ZF 4HP14 transmission 
using 205 mounts — **4.0 hrs** - [ ] Connect 205 
monopoint wiring loom and ECU to swapped engine — 
**2.0 hrs** - [ ] Install 306 ventilated front discs 
and calipers on 205 hubs — **2.5 hrs** - [ ] Fit 306 
14" wheels with correct tyres for clearance and 
diameter — **1.0 hr** - [ ] ✅ Master cylinder 
already upgraded — no action needed - [ ] Fill all 
fluids and bleed brakes thoroughly — **1.5 hrs** - [ 
] Conduct electrical and mechanical system checks — 
**1.5 hrs** - [ ] Perform initial road test and 
monitor for issues — **1.0 hr** - [ ] Adjust 
throttle cable, gear selector, and brakes as needed 
— **1.5 hrs** - [ ] Schedule routine post-swap 
maintenance — **0.5 hr** **Stage Two Total Estimate: 
~24.5 hours** ---
## Scheduling Tips
- **Evenings (Weekdays):** Use 1–3 hour windows for 
draining fluids, cleaning parts, organizing tools, 
and wiring tasks - **Weekends:** Allocate longer 4–6 
hour sessions for engine/trans removal, suspension, 
brake, and install work - **Prep Ahead:** Order 
parts and prep tools during the week to maximize 
weekend productivity - **Break Up Large Tasks:** 
Spread engine removal or install over multiple 
sessions if needed - **Log Progress:** Use blog 
posts to track sessions, issues, or part notes — it 
keeps momentum going - **Be Flexible:** Build in 
extra time for stuck bolts, missing tools, or 
problem-solving ---
## Latest Progress Updates
- [ ] Add links to blog posts here as you write them 
---
## Resources & References
- Peugeot 205 Si technical manuals and wiring 
diagrams - Recommended parts suppliers - Torque 
specs and service intervals --- *Last updated: 
2025-06-09* """,
    "projects/white-205-plan.md": """# White 205 Si 
    Motorsport Project
🚧 This page is under construction. The white 205 is 
being built for entry-level motorsport. Plans 
include: - Weight reduction - Safety gear (roll bar, 
seats, harnesses) - Handling improvements 
(suspension, tyres) - Possibly engine tuning or 
upgrade Check back soon for a full breakdown and 
build timeline. """,
    "projects/blue-205-plan.md": """# Blue 205 Si 
    XU10J4 Build
🚧 This page is under construction. This 
stripped-down 205 will receive: - A full XU10J4 16V 
engine conversion - Upgraded transmission, 
suspension, and brakes - Rebuilt or custom interior 
A full plan and progress log will be published as 
the project develops. """,
    "blog/progress-template.md": """# [Progress 
    Update Title]
**Date:** YYYY-MM-DD ---
## Work Completed
- [ ] List specific tasks or milestones achieved - [ 
] Include any inspections, repairs, or adjustments - 
[ ] Add notes about challenges or observations
## Photos
![Description](link-to-photo-1) 
![Description](link-to-photo-2)
## Next Steps
- [ ] Outline immediate next tasks or goals - [ ] 
Mention any parts or tools needed - [ ] Schedule 
tentative dates if applicable --- **Related 
Project:** [Red 205 Si Restoration 
Plan](../projects/red-205-plan.md) --- *Notes:* - 
Add any extra comments here. """
}
# Create folders
for folder in folders: os.makedirs(folder, 
    exist_ok=True)
# Write files
for filepath, content in files.items(): with 
    open(filepath, "w", encoding="utf-8") as f:
        f.write(content) 

print("✅ All project  markdown files and folders have been created.")
