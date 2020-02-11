# Hacked Wordpress site example

My site, davidsottimano.com was recently hacked. I noticed on Feb 10th 2020 although it could have been a few days earlier.

## Details of the hack

By going to the homepage using Googlebot user-agent, you would be shown a different version of the homepage
source: https://search.google.com/test/mobile-friendly?utm_source=gws&utm_medium=onebox&utm_campaign=suit&id=6DaWwYPtLl0vZuPLtrqbjQ

Injected links on this homepage would create unique URLs, none of which were in the posts/pages types. These were not indexed by Google.

Other pages simply changed content if the Googlebot UA was used: https://prnt.sc/r0hk1c

Note: Many of my sites on the same server were also hacked, each had different characteristics. I also noticed a new FTP user 
in my account which I quickly deleted.

## Fixing steps

	- 
