import Debug from "../../core/Debug/Debug.js";

export default class DocumentContainer {   // extends BaseContainer {


    changeUrl(url) {
        history.pushState({}, null, url);
        return this;
    }


    changeTitle(title) {
        document.title = title;
        return this;
    }



    addParameter(name, value) {


        /*history.pushState({}, null, url);
        return this;

        window.history.pushState('', 'New Page Title', '/new-url.php');*/


    }


    set title(value) {
        document.title = value;
    }


    set onLoaded(value) {

        document.addEventListener("DOMContentLoaded", value);

    }


    set onKeyDown(value) {

        document.addEventListener("keydown", value);

    }

    getBody() {

        let element = document.getElementsByTagName("body")[0];
        return element;

    }


    set onResize(value) {

        window.onresize = function() {
                value();
        }

    }



    isSmallerThan(widthPixel) {

        let value = false;
        if (window.matchMedia("(max-width: "+widthPixel+"px)").matches) {
            value=true;
        }

        return value;

    }



    set onScroll(event) {

        document.addEventListener("scroll", event);

    }


    set onEndScroll(value) {

        window.onscroll = function() {
            if (window.innerHeight + window.pageYOffset >= document.body.offsetHeight) {
                value();
            }
        }

    }


}