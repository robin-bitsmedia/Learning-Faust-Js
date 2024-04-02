import { gql } from '@apollo/client';
import React from 'react';
import { useBlocksTheme, getStyles } from '@faustwp/blocks';

export default function CoreParagraph(props) {
  // props is a parameter that contains the block data 
  // as obtained from the editorBlocks field 
  const attributes = props.attributes;
  const theme = useBlocksTheme();
  const style = getStyles(theme, props);

  console.log(attributes?.className)

  return (
    <p
    style={style} className={attributes?.cssClassName}
      dangerouslySetInnerHTML={{ __html: attributes?.content }}></p>
    );
}

CoreParagraph.fragments = {
  entry: gql`
    fragment CoreParagraphFragment on CoreParagraph {
      attributes {
        content
        cssClassName
        className
      }
    }
  `,
  key: `CoreParagraphFragment`,
};

CoreParagraph.displayName = 'CoreParagraph';
// This also works
// CoreParagraph.config.name = 'CoreParagraph'