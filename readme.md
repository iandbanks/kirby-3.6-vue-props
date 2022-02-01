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
* Open DevTools and select Network then Fetch/XHR.
* Navigate to {{site-root}}.tld/panel/site.

### Test 1: Image Test
* Observe the right and left images.
* The image on the left uses the vue prop `src`. It initially loads in the image, but after roughly 10 seconds, the image disappears.
* The image on the right uses the vue data object `src2`. It loads and will remain after the first image disappears.

### Test 2: JSON Object Test
* Observe the "On Load" top section. This displays the values that are in the `_props` object when the page is loaded / when the component is created.
* Observe the "On Fetch/XHR" bottom section. This displays the values that are in the `_props` object after the fetch event that clears out the props.

### Test 3: Todo Test
I duplicated the [simple todo example](https://getkirby.com/releases/3.6#fiber) as a section plugin and as a view plugin.
* Observe that on the page load the todo list displays.
* Observe that when the "Fetch/XHR" event takes place the todo content disappears.
* Now navigate to the Todo View by either clicking the link or going to the hamburger and then clicking "Todos".
* Observe the data persists.

## Screenshots / Videos
https://user-images.githubusercontent.com/1829348/151923584-2d4a16ee-08c0-4ccd-856a-83edfc620199.mp4


![example-screenshot](https://user-images.githubusercontent.com/1829348/152011810-219c98be-2bb9-4c6d-83bd-b3a692642867.jpg)

