import BaseContainer from "../Base/Base.js";
import SourceContainer from "./Source.js";
import AudioVideoBase from "./Base.js";

export default class AudioContainer extends AudioVideoBase {


    constructor(parentContainer = null) {
        super("audio", parentContainer);

        this.addAttributeWithoutValue("controls");

    }


    /*
    play() {

        //this.muted=false;

        this._htmlElement.play();
        return this;
    }


    pause() {
        this._htmlElement.pause();
        return this;
    }*/


    set audioUrl(value) {

        let source = new SourceContainer(this);
        source.src = value;
        source.type = "audio/mpeg";

    }


    set muted(value) {

        this._htmlElement.muted = value; // true;

        /*document.getElementById("myAudio").muted = true;
        this.addAttributeWithoutValue("muted");*/

    }



}


