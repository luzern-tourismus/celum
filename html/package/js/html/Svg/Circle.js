import BaseContainer from "../Base/Base.js";
import SvgBaseContainer from "./Base.js";


export default class Circle extends SvgBaseContainer {


    constructor(parentContainer) {

        super("circle", parentContainer);

        this.addAttribute("stroke","green");
        this.addAttribute("stroke-width","2");
        this.addAttribute("fill","yellow");

        //fill="yellow"

    }


    set x(value) {
        this.addAttribute("cx",value);
    }

    set y(value) {
        this.addAttribute("cy",value);
    }

    set radius(value) {
        this.addAttribute("r",value);
    }






}



/*
<svg width="100" height="100">
    <circle cx="50" cy="50" r="40" stroke="green" stroke-width="4" fill="yellow" />
</svg>
*/