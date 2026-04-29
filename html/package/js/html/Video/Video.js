import SourceContainer from "./Source.js";
import AudioVideoBase from "./Base.js";

export default class VideoContainer extends AudioVideoBase {


    constructor(parentContainer = null) {

        super("video", parentContainer);
        this.showControls = true;

    }

    set showControls(value) {

        if (value) {
            this.addAttributeWithoutValue("controls");
        } else {
            this.addAttribute()
            this.removeAttribute('controls');
        }

    }


    set width(value) {
        this.addAttribute("width", value);
    }

    set height(value) {
        this.addAttribute("height", value);
    }


    // https://www.w3schools.com/howto/howto_js_fullscreen.asp

    openFullscreen() {

        this._htmlElement.requestFullscreen();

    }


    set videoUrl(value) {

        let source = new SourceContainer(this);
        source.src = value;
        source.type = "video/mp4";

    }

}


