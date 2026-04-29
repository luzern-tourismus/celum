import BaseContainer from "../Base/Base.js";
import ContentContainer from "../Base/Content.js";
import Debug from "../../core/Debug/Debug.js";


export default class SvgBaseContainer extends BaseContainer {



    constructor(tagName,parentContainer) {


        super(tagName,parentContainer,"http://www.w3.org/2000/svg")

        //document.createElementNS('http://www.w3.org/2000/svg', 'svg');

     //   super("svg", parentContainer);
     //   this.text=   "Sorry, your browser does not support inline SVG.";

    }







/*

    set width(value) {
        this.addAttribute("width",value);
    }


    set height(value) {
this.addAttribute("height",value);
    }
*/


}




/*

<svg width="100" height="100">
   <circle cx="50" cy="50" r="40" stroke="green" stroke-width="4" fill="yellow"> </circle>
   Sorry, your browser does not support inline SVG.
</svg>

<svg width="100" height="100">
    <circle cx="50" cy="50" r="40" stroke="green" stroke-width="4" fill="yellow" />
</svg>
*/