---
layout: post
title: Webpage Alerts in 10 Lines of Code
date: 2012-04-25 22:57:09
categories:
- code
- lazy
- clever
- unix
- github
- gist
---

### The Problem
Undergrad students have priority registration for upper division classes.
Unfortunately for me, [Programming Languages](http://www.registrar.ucla.edu/schedule/subdet.aspx?srs=187510200&term=12S) was full long before
my enrollment appointment.  Even worse, the professor informed us that
he would be unable to give out any PTEs (special code to enroll in a class that is already at capacity)
because of the sheer volume of students interested in enrolling.
Usually, attending the lectures and asking is all it takes to get a PTE.

### The Solution
The [UCLA Registrar](http://www.registrar.ucla.edu/schedule/schedulehome.aspx) publishes enrollment counts in real time. One option was
to incessantly check the page. That's tedious and boring. I'm lazy. I wrote a small script that uses `curl` to download a given page, `grep` to search for the word "Open", and `mail` to alert me. A little-known fact is all US
cell phone carriers have a way to send text messages from an email address.
This happened to be beneficial because I get too much email to constantly check my inbox. Text messages to my phone will be seen by me almost instantly. The next step was to add a crontab that calls the alerter script every minute.

<script src="https://gist.github.com/2307166.js"> </script>

### The Result
I'm in the class :-)