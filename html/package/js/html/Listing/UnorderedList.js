import UlContainer from "./UlContainer.js";
import LiContainer from "./LiContainer.js";

export default class UnorderedList extends UlContainer {

    // addText
    addItem(text) {

        let li = new LiContainer(this);
        li.text=text;


        /*let li = document.createElement("li");
        li.innerHTML = text;
        this._htmlElement.appendChild(li);*/
    }

}