---
layout: post
title: iOS 5.0 Introduces Native Geocoding
date: 2012-01-07 15:44:39
categories:
- development
- code
- opensource
---

Last year, [March 27, 2011](https://github.com/derrickj/DJGeocoder/commit/366391873b975417b6894782e0c2d6026d5a60eb) to be exact, I released [DJGeocoder](https://github.com/derrickj/DJGeocoder),
an open source Objective-C class that allows you to cleanly geocode
street addresses in an iOS app. I wrote it back then because [Regions](/regions) needed it, and surprisingly, it wasn't built into MapKit.

Last night, I was playing around with a re-write, and discovered Apple's [CLGeocoder](http://developer.apple.com/library/ios/#documentation/CoreLocation/Reference/CLGeocoder_class/Reference/Reference.html), introduced in iOS 5. I won't be updating DJGeocoder. It is still useful if you need to support iOS versions prior to iOS 5. Otherwise, just use the newly introduced native API.