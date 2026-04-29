import BaseContainer from "../Base/Base.js";

export default class AudioVideoBase extends BaseContainer {


    play() {

        //this.muted=false;

        this._htmlElement.play();
        return this;
    }


    pause() {
        this._htmlElement.pause();
        return this;
    }


}