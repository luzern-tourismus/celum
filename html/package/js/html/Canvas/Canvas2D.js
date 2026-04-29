import ContentContainer from "../Base/Content.js";
import CanvasContainer from "./Canvas.js";


export default class Canvas2DContainer extends CanvasContainer {


    _context;

    constructor(parentContainer) {

        super("canvas", parentContainer);
        this._context = this._htmlElement.getContext('2d');

    }

   /* set canvasWidth(value) {
        this._htmlElement.width = value;
    }


    set canvasHeight(value) {
        this._htmlElement.height = value;
    }*/


    setColor(color) {

        this._context.fillStyle = color;
        return this;

    }


    drawRectangle(x,y,width,height) {

        this._context.fillRect(x,y,width,height);
        return this;

    }



    drawImage(image, x=0,y=0) {

        this._context.drawImage(image,x,y);
        return this;

    }





}