import Head from "next/head";

export default function Layout({ children }) {
  return (
    <>
      <Head>
        <title>My First WP</title>
      </Head>
      <main>{children}</main>
    </>
  );
}