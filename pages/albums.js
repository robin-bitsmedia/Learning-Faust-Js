import { gql, useQuery } from "@apollo/client";
import AlbumCard from "../components/AlbumCard";
import Layout from "../components/layout";

const GET_ALBUMS = gql`
  query getAlbums {
    albums {
      nodes {
        albumFields {
          cover {
            node {
              databaseId
              mediaItemUrl
            }
          }
          releaseDate
          albumTitle
        }
        databaseId
        slug
      }
    }
  }
`;

export default function Albums() {
  const { loading, error, data } = useQuery(GET_ALBUMS);

  if (loading) return "Loading...";
  if (error) return `Error! ${error.message}`;
  console.log(data.albums.nodes)

  return (
    <Layout>
      <ul className="gallery">
        {data.albums.nodes.map((album) => (
          <li className="galleryItem" key={album.databaseId}>
            <AlbumCard album={album} />
          </li>
        ))}
      </ul>
    </Layout>
  );
}
