---
layout: post
date: 2011-1-3 00:11:00
---

As stated in the previous post, I pulled Regions from the app store.  I can't go into as much detail as I want because I'm pressed for time. I start school tomorrow, so I'll likely be buried in work until spring break. This is meant to give brief account of what is going on.

### My code sucked, it didn't work.
There were numerous people complaining online about Location Services being broken in iOS 4.1. Although there may be problems that Apple needs to address, they are unrelated to the problems that Regions 1.0 had.
The sample code from WWDC *does* work. The user interface is better. I removed a lot from my app's workflow before it was finally released, but the WWDC code was even *simpler*. Regions is back, and it uses the WWDC code instead of my own.

### Better Testing
I'd like to get feedback before expending a ton of energy promoting it. I don't want to make the same mistake as last time(i.e. having zero beta testers). The standard procedure for beta testing on iOS is a *big headache*. 

Each tester has to:

1. Connect their phone to iTunes.
2. Find and e-mail me their UUID.

Then I have to:

1. Enter each UUID into the iOS developer portal.
2. Generate a mobile provisioning profile for the group.
3. Build the app and bundle it with the provisioning profile.

After I've sent the .zip file the tester has to:

4. Install the mobile provisioning profile.
5. Drag the app into itunes.
6. Sync his or her iPhone.
7. Pray that the app showed up.

[TestFlight](http://testflightapp.com/) seem's like it's going to take most of this pain away. I got into their private beta thanks to their [New Years gift](http://twitter.com/#!/testflightapp/status/21231076617748480).

### Soft Relaunch
Last time, I gave anyone that wanted it a promo code to download Regions for free. This can be a pain too. I don't want to put extra steps in the way of people that can give me feedback. So until Friday, January 7, 2011, [regions is free in the app store](http://itunes.apple.com/us/app/regions/id392441093). When it's not free, I'll still give out promo codes when I can.