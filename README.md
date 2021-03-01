# Walk Off

A Laravel-based baseball game. This is primarily an exercise in good TDD practices, and a way to think about the physics of the game of baseball, and what the component parts are of some of the more common properties.

Some things that are, or will be, included:
* At bat and at bat event models
* Score model
* Game model, to determine the game status
* Innings model, for the nuances of what inning it is, and what "half"
* Team model
* Player model
* Fielding interface, with fielding models that implement it for each position
* Pitching interface, with pitching models that implement it for each type of pitcher
* Hitting interface, with hitting models that implement it for the types of hits
