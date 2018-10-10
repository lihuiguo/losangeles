# Los Angeles
IA - Lihui Guo  
Designer - Aliye Gallagher  
Coder - Cassidy Clayton  
Website: http://csc174.org/assignment07/los-angeles

## Ontology
These are three University of Rochester juniors. The odd student out is differentiated by major. Two are Digital Media Studies majors, while the third is a Mechanical Engineering major.

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
The three students are arranged in alphabetical order by last name. This also allows for the two students with something in common (majoring in Digital Media Studies) to be placed consecutively.
The subsections for each student are arranged in order of importance. The introduction gives an overview, then we focus on college years because that's where they're at now. Work experience comes after since that's something that comes secondary to education right now in their lives.


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

Layout inspiration from [this Inspiration Hut] (https://inspirationhut.net/inspiration/powerful-simple-branding-socio-design/) article.
