# Los Angeles
IA - Lihui Guo  
Designer - Aliye Gallagher  
Coder - Cassidy Clayton  
Website: http://csc174.org/assignment07/los-angeles

## Ontology
These are three University of Rochester juniors. The odd student out is differentiated by major. Two are Digital Media Studies majors, while the third is a Mechanical Engineering major.
Each student has:
- intro/overview
- college experience
- work experience

## Taxonomy
### Introduction
Each student's section begins with an introduction of themselves - who they are, where they're from, and some of their interests and passions.
### College Years
The next section talks about their experience at the University of Rochester, such as the courses they've taken and how they landed on their major.
### Work Experience
This last section discusses the experiences students have had out in the real world.
### Sources
This gives credit for the content from the students' original Assignment 2 page.

## Choreography
The Z-pattern is as follows:
- primary: title
- strong: navigation links
- weak: description of website purpose
- terminal: continue reading more

The three students are arranged in alphabetical order by last name. This also allows for the two students with something in common (majoring in Digital Media Studies) to be placed consecutively. The subsections for each student are arranged in order of importance. The introduction gives an overview, then we focus on college years because that's where they're at now. Work experience comes after since that's something that comes secondary to education right now in their lives.

------------

## CSS Strategy
The css is split into three documents:
- styles.css
- styles_home.css
- styles_student.css
because the Z and F pages are styled differently. I initially split the css sheet into each page, then realized that I could be "factoring out" the styles that are the same between the two pages, so the styles.css document has all the styles that are applied to both pages.

Each page is organized further:
- layout
- styles
- state
- media
with state and media categories omitted if not necessary. Within each type, the code is organized how it is found on the page, from top to bottom.

## Layout
The Z layout is displayed on the homepage with the header in the top left (Primary), the navigation in the top right (strong), with a hero image of Rush Rhees below it, "this page by team LA" in the bottom left (weak), and a "read more about these students" in the bottom right, (terminal). I pushed the information to the edge, to fit best into the Z pattern. I worked with the IA to take off other information from the index page.

The F layout is on the "student information" page, and is displayed by having the headings of each paragraph on the left side, followed by the paragraph itself in the middle, then a photo on the far right. The Odd student out is highlighted by a different background color than the other two students.

For the navigation bar at the top, the IA and Designer decided to use an id to have a "jump to..." navigation, to jump to a specific person's information on the Student Info page. Because of this, it was necessary to have the navigation bar, and therefore the header (contained in the class .top-bar) to be present at all times on the website, so I used the position: fixed tag to keep it at the top of the viewport, and floated the header and nav to the left and right, respectively, to keep it neat.

I (the designer) struggled with the media queries, specifically with getting the header and nav to be positioned on top of one another after the breakpoint. Another issue I had was trying to get the top bar to not be fixed to the top of the viewport after the breakpoint.

## Color Choices and Other CSS
Layout look and colors inspiration from [this Inspiration Hut article] (https://inspirationhut.net/inspiration/powerful-simple-branding-socio-design/) and #5 on [this Hook agency article] (https://hookagency.com/website-color-schemes/)(hex codes from this article).

I pulled a color from Pooja's jacket to use for the pink color of the page, which I thought also matched Rush Rhees in the hero, and then used hex codes from the above inspiration website for the greys and black, adding white as well.

