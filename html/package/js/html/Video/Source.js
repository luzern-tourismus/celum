import BaseContainer from "../Base/Base.js";

export default class SourceContainer extends BaseContainer {


    constructor(parentContainer = null) {

        super("source", parentContainer);

    }


    set src(value) {
        this.addAttribute("src",value);

    }


    set type(value) {
        this.addAttribute("type",value);
    }




}