/** 
 * Block dependencies 
 */

import icon from "./icon";
import "./style.scss";

/**
 * Block libraries
 */

const { __ } = wp.i18n;
const { Fragment } = wp.element;
const { registerBlockType } = wp.blocks;

/**
 * Register Block
 */

export default registerBlockType("jsforwpadvblocks/gallery", {
    title: __("Gallery", "js"),
    description: ,
    icon,
    keywords,
    supports,
    attributes,
    edit,
    save

})
