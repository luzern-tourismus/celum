import BaseContainer from "../Base/Base.js";
import Caption from "./Caption.js";

export default class TableContainer extends BaseContainer {

    constructor(parentContainer) {
        super("table", parentContainer);
    }

    set border(value) {
        this._htmlElement.border = value;
    }


    set caption(value) {

        let caption = new Caption(this);
        caption.text = value;

    }

}
