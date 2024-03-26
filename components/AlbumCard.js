import Link from "next/link";

export default function AlbumCard({ album }) {
    return (
      <Link href={`/albums/${album.slug}`}>
      <div>
      <img className="album-img" src={album?.albumFields.cover?.node?.mediaItemUrl} />

      <h3 className="album-title">{album?.albumFields.albumTitle}</h3>
      </div>
        
      </Link>
    );
  }