# Simple Particle JS implementation for Wordpress


This plugin renders [particle js](https://vincentgarreau.com/particles.js/) animations in the wordpress site. as shown here [Particle JS Sample ](https://codepen.io/VincentGarreau/pen/pnlso?css-preprocessor=scss)

Install this plugin by zipping the folder into upload plugin then activate it.
Once activated place the below html to render the particle js in it

```
<!-- particles.js container -->
<div id="particles-js"></div>
```

# To customize the effects

visit [particle js](https://vincentgarreau.com/particles.js/) to generate the required effects. Once done come to the `particle-background.js` and edit the generated configurations. The new effects will show.

To change how the particle js canvas renders you can edit the css in `particle-background.css`. By default its designed to cover the entire page background using `position: absolute` and `z-index: -1` for particlejs  container and rest of elements use `z-index:1` using `*` selector
