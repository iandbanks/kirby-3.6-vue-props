# Plugin: Kirby 3.6 Vue Props
This plugin serves as a proof of concept to demonstrate irregularities with how Kriby handles passing and handling props between a plugins `index.php` file and how it receives those props in a custom vue component.

## Setup
* Create a new Kirby 3.6.x instance `composer create-project getkirby/starterkit test-site`
* Navigate to `/site`
* Create a plugins dir (if one does not exist)
* `git clone https://github.com/iandbanks/kirby-3.6-vue-props.git`
* Open `{site-root}/site/blueprints/site.yml` and replace with contents of [`sample-site.yml`](./sample-site.yml)
* Use valet (or similar) to create a local testing site off off `{site-root}`
* Navigate to `{site-root}.tld/panel`, and create a user/password to get into the panel.

You should now see a simple 2 column layout with 2 images. 

## Testing
### Image Test
* Observer the right and left images.
* The image on the left uses the vue prop `src`. It initially loads in the image, but after roughly 10 seconds, the image disappears.
* The image on the right uses the vue data object `src2`. It loads and will remain after the first image disappears.

### JSON Object Test
* Observe the "On Load" top section. This displays the values that are in the `_props` object when the page is loaded / when the component is created.
* Observe the "On Fetch/XHR" bottom section. This displays the values that are in the `_props` object after the fetch event that clears out the props. 
