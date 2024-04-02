import { gql } from '@apollo/client';

// wp-templates/front-page.js
import blocks from '../wp-blocks';
import { flatListToHierarchical } from '@faustwp/core';
import { WordPressBlocksViewer } from '@faustwp/blocks';




export default function Component( props) {
  // Loading state for previews.
  if (props.loading) {
    return <>Loading...</>;
  }

  const { title, editorBlocks } = props.data?.page ?? { title: '' };
  const blockList = flatListToHierarchical(editorBlocks, { childrenKey: 'innerBlocks' });
  console.log(blockList)


  return (
    <div className='is-layout-constrained'>
      <h1>{title}</h1>
      <WordPressBlocksViewer blocks={blockList} />
    </div>
  );
}

Component.variables = (seedData, ctx) => {
  console.log("DDD:::",seedData)
  return {
    databaseId: seedData.databaseId,
    asPreview: ctx?.asPreview,
  };
};

Component.query = gql`
  ${blocks.CoreParagraph.fragments.entry}
  ${blocks.CoreColumns.fragments.entry}
  ${blocks.CoreColumn.fragments.entry}
  ${blocks.CoreCode.fragments.entry}
  ${blocks.CoreButtons.fragments.entry}
  ${blocks.CoreButton.fragments.entry}
  ${blocks.CoreQuote.fragments.entry}
  ${blocks.CoreImage.fragments.entry}
  ${blocks.CoreSeparator.fragments.entry}
  ${blocks.CoreList.fragments.entry}
  ${blocks.CoreHeading.fragments.entry}
  query GetPage(
    $databaseId: ID!
    $asPreview: Boolean = false
  ) {
    page(id: $databaseId, idType: DATABASE_ID, asPreview: $asPreview) {
      title
      content
      editorBlocks {
        name
        __typename
        renderedHtml
        id: clientId
        parentId: parentClientId
        ...${blocks.CoreParagraph.fragments.key}
        ...${blocks.CoreColumns.fragments.key}
        ...${blocks.CoreColumn.fragments.key}
        ...${blocks.CoreCode.fragments.key}
        ...${blocks.CoreButtons.fragments.key}
        ...${blocks.CoreButton.fragments.key}
        ...${blocks.CoreQuote.fragments.key}
        ...${blocks.CoreImage.fragments.key}
        ...${blocks.CoreSeparator.fragments.key}
        ...${blocks.CoreList.fragments.key}
        ...${blocks.CoreHeading.fragments.key}
      }
    }
  }
`;




