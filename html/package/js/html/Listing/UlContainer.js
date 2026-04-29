import BaseContainer from "../Base/Base.js";
import LiContainer from "./LiContainer.js";

export default class UlContainer extends BaseContainer {

    constructor(parentContainer) {
        super("ul", parentContainer);
    }


    /*addContainer(container) {

        let li = new LiContainer();
        li.addContainer(container);

        super.addContainer(li);

    }*/


    set listStyle(value) {
        this._htmlElement.style.listStyleType = value;
    }

}