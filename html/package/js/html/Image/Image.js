import BaseContainer from "../Base/Base.js";


export default class ImageContainer extends BaseContainer {

    _src;

    constructor(parentContainer) {
        super("img", parentContainer);
    }

    set src(value) {
        this._src=value;
        this._htmlElement.src =value;
    }

    get src() {
        return this._src;
    }





    /*set responseImage(value) {
        this.widthPercent=100;
    }*/

    set imageWidth(value) {
        this._htmlElement.width=value;
    }

    set imageHeight(value) {
        this._htmlElement.height=value;
    }

}
