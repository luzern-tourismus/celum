import BaseContainer from "../Base/Base.js";

export default class IframeContainer extends BaseContainer {

    constructor(parentContainer) {
        super("iframe", parentContainer);
    }

    set src(value) {
        this._htmlElement.src = value;
    }

    set width(value) {
        this._htmlElement.width = value;
    }

    set height(value) {
        this._htmlElement.height = value;
    }

    set frameborder(value) {
        this._htmlElement.frameBorder = value;
    }

}